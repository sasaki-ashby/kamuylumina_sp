import React from "react";
import styled from "styled-components";

export default function TopMiddle9() {
  const TopMiddleMainContainer = styled.div`
    height: 768px;
    background-image: url("/assets/img/top10.png");
    background-size: cover;
    background-position: center;
  `;

  return <TopMiddleMainContainer></TopMiddleMainContainer>;
}
