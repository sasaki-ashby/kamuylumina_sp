import React from "react";
import styled from "styled-components";

export default function TopMiddle7() {
  const TopMiddleMainContainer = styled.div`
    height: 768px;
  `;

  const TopMiddleContainer = styled.div`
    display: flex;
    justify-content: space-evenly;
    align-items: center;
  `;

  const TopMiddleImage = styled.div`
    position: relative;
    height: 460px;
    width: 929px;
    background-image: url("/assets/img/top8.png");
  `;

  const SubTitleContainer = styled.div`
    position: absolute;
    display: flex;
    justify-content: flex-end;
    align-items: flex-end;
    height: 60px;
    width: 342px;
    background-color: #ffffff;
    border-radius: 8px 0 0 0;
    right: 0;
    bottom: 0;
    text-align: end;
  `;

  const SubTitle = styled.p`
    font-size: 14px;
    color: #002c4b;
  `;

  const TopMiddleText = styled.div`
    font-size: 22px;
    line-height: 35px;
    color: #002c4b;
    text-align: center;
    bottom: 50px;
    left: 50px;
  `;

  const TopMiddleRight = styled.div`
    flex-direction: column;
    align-items: center;
    text-align: center;
  `;

  const TopMiddleText2 = styled.p`
    font-size: 16px;
    line-height: 35px;
    color: #002c4b;
    text-align: center;
  `;

  const MoreBtn = styled.img`
    cursor: pointer;
  `;

  const TopCardContainer = styled.div`
    display: flex;
    justify-content: center;
    margin: 20px;
  `;

  const CardImage = styled.img`
    width: 200px;
    height: 120px;
    border-radius: 8px;
    cursor: pointer;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    &:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
  `;

  return (
    <TopMiddleMainContainer>
      <TopMiddleContainer>
        <TopMiddleImage>
          <SubTitleContainer>
            <SubTitle>今回は地元に住む4人がアトラクションを体験!</SubTitle>
          </SubTitleContainer>
        </TopMiddleImage>
        <TopMiddleRight>
          <TopMiddleText>
            <img src="/assets/img/top_text3.png" alt="top_text3" />
          </TopMiddleText>
          <TopMiddleText2>
            阿寒湖温泉やアイヌ文化について等、
            <br />
            阿寒の情報をお届けしています。
          </TopMiddleText2>
          <MoreBtn src="/assets/img/top_text4.png" alt="top_text4" />
        </TopMiddleRight>
      </TopMiddleContainer>
      <TopCardContainer>
        <CardImage src="/assets/img/top_card.png" />
        <CardImage src="/assets/img/top_card2.png" />
        <CardImage src="/assets/img/top_card3.png" />
        <CardImage src="/assets/img/top_card4.png" />
        <CardImage src="/assets/img/top_card5.png" />
      </TopCardContainer>
    </TopMiddleMainContainer>
  );
}
