import React from "react";
import styled from "styled-components";

import Header from "../components/header";
import Headline from "../components/headline";
import TopMiddle from "../components/topMiddle";

const HeadlineContainer = styled.div`
  height: 768px;
  background-size: cover;
  background-image: url("/assets/img/top1.jpeg");
  background-size: cover;
  background-position: center;
`;

export default function top() {
  return (
    <div>
      <HeadlineContainer>
        <Header />
        <Headline />
      </HeadlineContainer>
      <TopMiddle />
    </div>
  );
}
