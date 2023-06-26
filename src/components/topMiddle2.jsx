import React from "react";
import styled from "styled-components";

export default function TopMiddle2() {
  const TopMiddleContainer = styled.div`
    display: flex;
    justify-content: center;
    align-items: center;
    height: 768px;
    background-image: url("/assets/img/top4.jpeg");
    margin: 10px;
  `;

  const MiddleTextImage = styled.img`
    width: 553px;
    height: 234px;
  `;

  const IconContainer = styled.div`
    position: relative;
  `;

  const MiddleIconImage = styled.img`
    width: 554.39px;
    height: 506.96px;
    background-size: cover;
    background-position: center;
  `;

  const MiddleIconImage2 = styled.img`
    position: absolute;
    width: 40.9px;
    height: 46.4px;
    top: 240px;
    right: 150px;
  `;

  return (
    <TopMiddleContainer>
      <MiddleTextImage src="/assets/img/top_text.png" alt="top_text" />
      <IconContainer>
        <MiddleIconImage src="/assets/img/top_icon.png" alt="top_text" />
        <MiddleIconImage2 src="/assets/img/top_icon2.png" alt="top_text" />
      </IconContainer>
    </TopMiddleContainer>
  );
}
