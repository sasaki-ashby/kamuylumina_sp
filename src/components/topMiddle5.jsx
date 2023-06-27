import React from "react";
import styled from "styled-components";

export default function TopMiddle5() {
  const TopMiddleContainer = styled.div`
    display: flex;
    justify-content: flex-start;
    align-items: center;
    height: 768px;
  `;

  const MiddleImage = styled.img`
    width: 880px;
    height: 544px;
    margin-right: 50px;
  `;

  const TopMiddleText = styled.p`
    display: flex;
    font-size: 16px;
    line-height: 40px;
    color: #002c4b;
    text-align: center;
    margin-left: 50px;
  `;

  return (
    <TopMiddleContainer>
      <MiddleImage src="/assets/img/top6.png" alt="top6" />
      <TopMiddleText>
        特に注目すべきは、キーアイテムである
        <br />
        リズムスティックです。これを手にすると、
        <br />
        不思議なことが起こるかもしれません。
        <br />
      </TopMiddleText>
    </TopMiddleContainer>
  );
}
