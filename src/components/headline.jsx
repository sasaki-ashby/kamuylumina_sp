import React from "react";
import styled from "styled-components";

const HeadlineContainer = styled.div`
  position: relative;
  flex-direction: column;
  height: 768px;
  color: #ffffff;
  padding: 50px;
  line-height: 0.5;
`;

const TitleH2 = styled.p`
  display: flex;
  justify-content: center;
  color: #ffffff;
  font-size: 35px;
  line-height: 1;
`;

const TitleH1 = styled.p`
  display: flex;
  justify-content: center;
  color: #ffffff;
  font-size: 50px;
  letter-spacing: 10px;
  font-weight: 200;
`;

const DateText = styled.p`
  display: flex;
  justify-content: center;
  color: #ffffff;
  font-size: 14px;
  margin-bottom: 40px;
`;
const Text = styled.p`
  display: flex;
  justify-content: center;
  color: #ffffff;
  font-size: 16px;
`;

const OfficialContainer = styled.div`
  position: absolute;
  display: flex;
  align-items: center;
  border-radius: 8px 0 0 0;
  right: 0;
  top: 530px;
  line-height: 2;
  width: 462px;
  background-color: #ffffff;
`;

const Text1 = styled.p`
  color: #002c4b;
  font-size: 14px;
  cursor: pointer;
  margin-top: 40px;
`;

const OfficialImage = styled.div`
  height: 100px;
  background-color: grey;
  margin: 20px 20px 0 20px;
`;

const TopImage3 = styled.img`
  background-size: cover;
  background-position: center;
`;

export default function headline() {
  return (
    <HeadlineContainer>
      <TitleH2>
        <img src="/assets/img/top_site_name.png" alt="site_name" />
      </TitleH2>
      <TitleH1>SPECIAL　SITE</TitleH1>
      <DateText>2023.07.15　UPGRADE</DateText>
      <Text>
        今年は特別な演出を追加したアップグレードバージョンをお楽しみいただけます！
      </Text>
      <OfficialContainer>
        <OfficialImage>
          <TopImage3 src="/assets/img/top3.jpeg" alt="top3" />
        </OfficialImage>
        <Text1>
          <img src="/assets/img/top_official_text.png" alt="" />
        </Text1>
      </OfficialContainer>
    </HeadlineContainer>
  );
}
