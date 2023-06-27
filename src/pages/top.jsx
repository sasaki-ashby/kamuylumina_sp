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
import TopMiddle7 from "../components/topMiddle7";
import TopMiddle8 from "../components/topMiddle8";
import TopMiddle9 from "../components/topMiddle9";
import TopMiddle10 from "../components/topMiddle10";
import TopMiddle11 from "../components/topMiddle11";
import TopMiddle12 from "../components/topMiddle12";
import TopMiddle13 from "../components/topMiddle13";
import TopUnder from "../components/topUnder";

const TopMainContainer = styled.div`
  height: 11520px;
  margin: 0;
  padding: 0;
`;

const HeadlineContainer = styled.div`
  height: 768px;
  background-image: url("/assets/img/top1.png");
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
        <TopMiddle7 />
        <TopMiddle8 />
        <TopMiddle9 />
        <TopMiddle10 />
        <TopMiddle11 />
        <TopMiddle12 />
        <TopMiddle13 />
        <TopUnder />
      </TopMainContainer>
    </div>
  );
}
