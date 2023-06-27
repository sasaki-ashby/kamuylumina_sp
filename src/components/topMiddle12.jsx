import React from "react";
import styled from "styled-components";

export default function TopMiddle12() {
  const TopMiddleMainContainer = styled.div`
    display: flex;
    justify-content: space-evenly;
    height: 768px;
  `;

  const TopMiddleLeft = styled.div`
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  `;

  const ImageLeft = styled.img`
    width: 570px;
    height: 290px;
    object-fit: cover;
  `;

  const TopMiddleRight = styled.div`
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    height: 768px;
  `;

  const ImageRight = styled.img`
    width: 570px;
    height: 290px;
    object-fit: cover;
  `;

  const Title = styled.p`
    font-size: 16px;
    object-fit: cover;
    color: #002c4b;
  `;

  const SubTitle = styled.span`
    font-size: 10px;
    object-fit: cover;
    color: #002c4b;
  `;

  const Text = styled.p`
    font-size: 13px;
    object-fit: cover;
    color: #002c4b;
    line-height: 35px;
    text-align: center;
  `;

  const MoreBtn = styled.img`
    cursor: pointer;
  `;

  return (
    <TopMiddleMainContainer>
      <TopMiddleLeft>
        <ImageLeft src="/assets/img/top15.png" />
        <Title>Akan Adventure Tourism</Title>
        <SubTitle>http://akanat.co.jp/atdepartment/en/</SubTitle>
        <Text>
          阿寒では自然のアクティビティが沢山ありますので是非体験してください。
          <br />
          その他阿寒での楽しみ方のヒントが詰まっていますので
          <br />
          是非ご確認ください。
        </Text>
        <MoreBtn src="/assets/img/top_text9.png" alt="top_text9" />
      </TopMiddleLeft>
      <TopMiddleRight>
        <ImageRight src="/assets/img/top14.png" />
        <Title>カムイルミナへの旅 オフィシャルサイト</Title>
        <SubTitle>https://www.kamuylumina.jp/</SubTitle>
        <Text>
          カムイルミナの魅力的なストーリーや動画など、ぜひ公式サイトをご覧ください。
          <br />
          公式サイトでは、神秘の冒険に向けてカムイルミナの世界を探索することができます。
          <br />
          カムイルミナを存分に楽しむためにも公式サイトをぜひご訪問ください。
        </Text>
        <MoreBtn src="/assets/img/top_text9.png" alt="top_text9" />
      </TopMiddleRight>
    </TopMiddleMainContainer>
  );
}
