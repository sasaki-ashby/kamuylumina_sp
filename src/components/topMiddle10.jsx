import React from "react";
import styled from "styled-components";

export default function TopMiddle10() {
  const TopMiddleMainContainer = styled.div`
    height: 768px;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
  `;

  const ImageText = styled.img`
    width: 400px;
    height: 290px;
    background-size: cover;
    background-position: center;
  `;

  const TopMiddleRight = styled.div`
    flex-direction: column;
    align-items: center;
  `;

  const Img = styled.img`
    width: 429px;
    height: 271px;
    background-size: cover;
    background-position: center;
    margin: 10px;
  `;

  return (
    <TopMiddleMainContainer>
      <ImageText src="/assets/img/top_text6.png" />
      <TopMiddleRight>
        <div>
          <Img src="/assets/img/top11.png" />
        </div>
        <div>
          <Img src="/assets/img/top12.png" />
        </div>
      </TopMiddleRight>
    </TopMiddleMainContainer>
  );
}
