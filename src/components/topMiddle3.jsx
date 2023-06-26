import React from "react";
import styled from "styled-components";

export default function TopMiddle3() {
  const TopMiddleContainer = styled.div`
    margin: 10px;
    display: flex;
    justify-content: flex-end;
    width: 100%;
    align-items: center;
  `;
  const MiddleTextImage = styled.img`
    width: 508px;
    height: 485px;
    margin-right: 100px;
    max-width: 100%;
  `;
  const MiddleImage = styled.img`
    width: 650px;
    height: 650px;
    max-width: 100%;
    margin-left: 100px;
  `;

  return (
    <>
      <TopMiddleContainer>
        <MiddleTextImage src="/assets/img/top_text2.png" alt="top_text2" />
        <MiddleImage src="/assets/img/top5.png" alt="top5" />
      </TopMiddleContainer>
    </>
  );
}
