import React from "react";
import { Link } from "react-router-dom";
import Web3 from "web3";

const Card = ({ tokenId, name, image, price, owner, isForSale }) => {
    console.log("image: ", image);
    return (
        <div className="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div className="nft__item">
                <div className="de_countdown" data-year="2021" data-month="9" data-day="16"
                     data-hour="8"></div>
                <div className="author_list_pp">
                    <a href="user/detail">

                    </a>
                </div>
                <div className="nft__item_wrap">
                    <a href="item/detail">
                    </a>
                </div>
                <div className="nft__item_info">
                    <a href="item-details.html">
                        <h4>12321</h4>
                    </a>
                    <div className="nft__item_price">
                      12312 ETH<span>1/20</span>
                    </div>
                    <div className="nft__item_action">
                        <a href="#">Place a bid</a>
                    </div>
                    <div className="nft__item_like">
                        <i className="fa fa-heart"></i><span>50</span>
                    </div>
                </div>
            </div>
        </div>
    );
};
export default Card;
