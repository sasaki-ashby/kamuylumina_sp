import React from "react";
import styled from "styled-components";

export default function TopMiddle6() {
  const TopMiddleMainContainer = styled.div`
    height: 768px;
  `;
  const TopMiddleContainer = styled.div`
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    background-size: cover;
    background-position: center;
    height: 600px;
    background-image: url("/assets/img/top7.png");
  `;

  const TopMiddleText = styled.p`
    position: absolute;
    font-size: 16px;
    line-height: 46px;
    color: #ffffff;
    text-align: left;
    top: 50px;
    left: 100px;
  `;

  const TopMiddleText2 = styled.p`
    font-size: 16px;
    line-height: 46px;
    color: #002c4b;
    text-align: center;
  `;

  return (
    <TopMiddleMainContainer>
      <TopMiddleContainer>
        <TopMiddleText>
          大自然と融合した光と音の デジタルアートが織りなす幻想的な世界で
          <br />
          およそ50分にわたる壮大な旅に身を委ね、 心躍る時間をお楽しみください。
        </TopMiddleText>
      </TopMiddleContainer>
      <TopMiddleText2>
        阿寒湖の森ナイトウォーク
        カムイルミナは、言葉にできない魅力が広がる特別な体験です。 <br />
        ぜひこの機会に訪れて、心に残る感動を味わってください。
      </TopMiddleText2>
    </TopMiddleMainContainer>
  );
}
