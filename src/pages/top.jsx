import React from "react";
import styled from "styled-components";
// import { Swiper, SwiperSlide } from "swiper/react";
import "swiper/swiper-bundle.css";

import Header from "../components/header";
import Headline from "../components/headline";
import TopMiddle from "../components/topMiddle";
import TopMiddle2 from "../components/topMiddle2";
import TopMiddle3 from "../components/topMiddle3";
import TopMiddle4 from "../components/topMiddle4";
import TopMiddle5 from "../components/topMiddle5";
import TopMiddle6 from "../components/topMiddle6";

const TopMainContainer = styled.div`
  height: 11520px;
  margin: 0;
  padding: 0;
`;

const HeadlineContainer = styled.div`
  height: 768px;
  background-image: url("/assets/img/top1.jpeg");
  background-size: cover;
  background-position: center;
`;

export default function Top() {
  return (
    <div>
      <TopMainContainer>
        <HeadlineContainer>
          <Header />
          <Headline />
        </HeadlineContainer>
        <TopMiddle />
        <TopMiddle2 />
        <TopMiddle3 />
        <TopMiddle4 />
        <TopMiddle5 />
        <TopMiddle6 />
      </TopMainContainer>
    </div>
  );
}
