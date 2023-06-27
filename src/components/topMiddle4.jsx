import React from "react";
import styled from "styled-components";

export default function TopMiddle4() {
  const TopMiddleContainer = styled.div`
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: black;
    height: 768px;
  `;

  const MiddleImage = styled.img`
    width: 768px;
    height: 768px;
  `;

  const TopMiddleText = styled.p`
    display: flex;
    font-size: 16px;
    line-height: 46px;
    color: #ffffff;
    text-align: center;
  `;

  return (
    <>
      <TopMiddleContainer>
        <MiddleImage src="/assets/img/top_icon3.png" alt="top_icon3" />
        <TopMiddleText>
          阿寒のアイヌ文化に根付いたユーカラ（叙事詩）
          <br />
          「フクロウとカケスの物語」をベースに、
          <br />
          8つのゾーンでさまざまな物語が繰り広げられます。
          <br />
          それぞれのゾーンで体験することができる
          <br />
          驚きと感動にご期待ください。
        </TopMiddleText>
      </TopMiddleContainer>
    </>
  );
}
