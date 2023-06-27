import React from "react";
import styled from "styled-components";

export default function TopMiddle8() {
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
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    background-image: url("/assets/img/top9.png");
    height: 588px;
  `;

  const TopCardContainer = styled.div`
    position: absolute;
    display: flex;
    justify-content: space-evenly;
    bottom: -100px;
  `;

  const Card = styled.div`
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #ffffff;
    width: 340px;
    height: 211.56px;
    border-radius: 8px;
    margin: 0 20px;
    cursor: pointer;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    &:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
  `;

  return (
    <TopMiddleMainContainer>
      <TopMiddleContainer>
        <img src="/assets/img/top_text5.png" alt="top_text5" />
        <TopCardContainer>
          <Card>
            <p>Coming soon</p>
          </Card>
          <Card>
            <p>Coming soon</p>
          </Card>
          <Card>
            <p>Coming soon</p>
          </Card>
        </TopCardContainer>
      </TopMiddleContainer>
    </TopMiddleMainContainer>
  );
}
