import React from "react";
import styled from "styled-components";

export default function TopMiddle13() {
  const TopMiddleMainContainer = styled.div`
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    height: 768px;
    background-color: #f5f8fc;
  `;

  const TopMiddleLeft = styled.div`
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
  `;

  const TopMiddleRight = styled.div`
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 640px;
    width: 640px;
    background-color: white;
  `;

  const Title = styled.p`
    font-size: 16px;
    color: #002c4b;
  `;

  const Text = styled.p`
    font-size: 13px;

    color: #002c4b;
    line-height: 35px;
    text-align: left;
  `;

  const FaceBookBtn = styled.div`
    cursor: pointer;
    border: 1px solid #000;
    padding: 15px 30px;
    font-size: 12px;
    color: #002c4b;
    display: flex;
    align-items: center;
    margin: 5px;
  `;

  const InstagramBtn = styled.div`
    cursor: pointer;
    border: 1px solid #000;
    padding: 15px 23px;
    font-size: 12px;
    color: #002c4b;
    display: flex;
    align-items: center;
    margin: 5px;
  `;

  const FaceBookIcon = styled.img`
    cursor: pointer;
    color: #002c4b;
    width: 8.95px;
    height: 16.64px;
    margin-right: 10px;
  `;

  const InstagramIcon = styled.img`
    cursor: pointer;
    color: #002c4b;
    width: 16.64px;
    height: 16.64px;
    margin-right: 10px;
  `;

  return (
    <TopMiddleMainContainer>
      <TopMiddleLeft>
        <Title>
          各種SNSで最新情報や <br />
          イベントなどを発信しています。
        </Title>

        <Text>
          阿寒やカムイルミナの最新情報などを発信しています。
          <br />
          現地情報のチェックはTwitterがおすすめです。
          <br />
          是非フォローとチェックお願いいたします！
        </Text>
        <FaceBookBtn>
          <FaceBookIcon
            src="/assets/img/facebook_icon.png"
            alt="facebook_icon"
          />
          FACEBOOK
        </FaceBookBtn>
        <InstagramBtn>
          <InstagramIcon
            src="/assets/img/instagram_icon.png"
            alt="instagram_icon"
          />
          INSTAGRAM
        </InstagramBtn>
      </TopMiddleLeft>
      <TopMiddleRight></TopMiddleRight>
    </TopMiddleMainContainer>
  );
}
