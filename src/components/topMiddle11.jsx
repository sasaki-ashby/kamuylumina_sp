import React from "react";
import styled from "styled-components";

export default function TopMiddle11() {
  const TopMiddleMainContainer = styled.div`
    display: flex;
    height: 768px;
    width: 100%;
  `;

  const TopMiddleLeft = styled.div`
    flex: 8;
  `;

  const ImageLeft = styled.img`
    width: 100%;
    height: 768px;
    object-fit: cover;
  `;

  const TopMiddleRight = styled.div`
    flex: 2;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #002c4b;
    width: 342px;
    height: 768px;
  `;

  const ImageText = styled.img``;

  const ImageText2 = styled.img`
    margin-top: 40px;
    cursor: pointer;
  `;

  return (
    <TopMiddleMainContainer>
      <TopMiddleLeft>
        <ImageLeft src="/assets/img/top13.png" />
      </TopMiddleLeft>
      <TopMiddleRight>
        <ImageText src="/assets/img/top_text7.png" />
        <ImageText2 src="/assets/img/top_text8.png" />
      </TopMiddleRight>
    </TopMiddleMainContainer>
  );
}
