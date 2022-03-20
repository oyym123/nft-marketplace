import React, {useEffect} from "react";
import {useDispatch, useSelector} from "react-redux";
import getWeb3 from "../../utils/getWeb3";
import ArtMarketplace from "../../contracts/ArtMarketplace.json";
import ArtToken from "../../contracts/ArtToken.json";

import {
    setNft,
    setAccount,
    setTokenContract,
    setMarketContract,
} from "../../redux/actions/nftActions";
import Card from "./Card";
import ReactDOM from "react-dom";

const Home = () => {
    const nft = useSelector((state) => state.allNft.nft);
    const dispatch = useDispatch();

    useEffect(() => {
        let itemsList = [];
        const init = async () => {
            try {
                const web3 = await getWeb3();
                const accounts = await web3.eth.getAccounts();

                if (typeof accounts === undefined) {
                    alert("Please login with Metamask!");
                    console.log("login to metamask");
                }

                const networkId = await web3.eth.net.getId();
                try {
                    const artTokenContract = new web3.eth.Contract(
                        ArtToken.abi,
                        ArtToken.networks[networkId].address
                    );
                    // console.log("Contract: ", artTokenContract);
                    const marketplaceContract = new web3.eth.Contract(
                        ArtMarketplace.abi,
                        ArtMarketplace.networks[networkId].address
                    );
                    const totalSupply = await artTokenContract.methods
                        .totalSupply()
                        .call();
                    const totalItemsForSale = await marketplaceContract.methods
                        .totalItemsForSale()
                        .call();

                    for (var tokenId = 1; tokenId <= totalSupply; tokenId++) {
                        let item = await artTokenContract.methods.Items(tokenId).call();
                        //返回tokenId代币持有者的地址。
                        let owner = await artTokenContract.methods.ownerOf(tokenId).call();
                        const response = await api
                            .get(`/tokens/${tokenId}`)
                            .catch((err) => {
                                console.log("Err: ", err);
                            });
                        console.log("response: ", response);

                        //初始化数据
                        itemsList.push({
                            name: response.data.name,
                            description: response.data.description,
                            image: response.data.image,
                            tokenId: item.id,
                            creator: item.creator,
                            owner: owner,
                            uri: item.uri,
                            isForSale: false,
                            saleId: null,
                            price: response.data.price,
                            isSold: null,
                        });
                    }
                    if (totalItemsForSale > 0) {  //如果可售数量大于0
                        for (var saleId = 0; saleId < totalItemsForSale; saleId++) {
                            //获取可售商品信息
                            let item = await marketplaceContract.methods
                                .itemsForSale(saleId)
                                .call();

                            //获取合约中商品列表的可售状态
                            let active = await marketplaceContract.methods
                                .activeItems(item.tokenId)
                                .call();

                            let itemListIndex = itemsList.findIndex(
                                (i) => i.tokenId === item.tokenId
                            );

                            //将销售状态重新写入itemsList
                            itemsList[itemListIndex] = {
                                ...itemsList[itemListIndex],
                                isForSale: active,
                                saleId: item.id,
                                price: item.price,
                                isSold: item.isSold,
                            };
                        }
                    }

                    //将获取到的信息 通过dispatch 跟子组件共享
                    dispatch(setAccount(accounts[0]));
                    dispatch(setTokenContract(artTokenContract));
                    dispatch(setMarketContract(marketplaceContract));
                    dispatch(setNft(itemsList));
                } catch (error) {
                    console.error("Error", error);
                    alert(
                        "Contracts not deployed to the current network " +
                        networkId.toString()
                    );
                }
            } catch (error) {
                alert(
                    `Failed to load web3, accounts, or contract. Check console for details.` +
                    error
                );
                console.error(error);
            }
        };
        init();
    }, [dispatch]);

    console.log("Nft :", nft);
    const nftItem = useSelector((state) => state.allNft.nft);
    return (
            <Grid
                container
                direction="row"
                justifyContent="center"
                alignItems="center"
                spacing={2}
            >
                {nftItem.map((nft) => (
                    <Grid item key={nft.tokenId}>
                        <Card {...nft} />
                    </Grid>
                ))}
            </Grid>
    );
}

export default Home;




