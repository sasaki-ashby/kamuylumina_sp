import React from "react";
import styled from "styled-components";
import { animateScroll as scroll } from "react-scroll";

export default function TopUnder() {
  const TopMiddleMainContainer = styled.div`
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 768px;
    background-image: url("/assets/img/top16.png");
    background-size: cover;
    background-position: center;
  `;

  const TitleImage = styled.img`
    width: 156.69px;
    height: 121.22px;
    margin-bottom: 20px;
  `;

  const Text = styled.p`
    font-size: 14px;
    color: #ffffff;
  `;

  const BtnContainer = styled.div`
    display: flex;
    margin: 40px;
  `;

  const OfficialBtn = styled.div`
    color: white;
    font-size: small;
    margin-right: 20px;
    padding: 10px 15px;
    border-radius: 8px;
    cursor: pointer;
  `;

  const TicketBtn = styled.div`
    background-color: #ffffff;
    font-size: 11px;
    padding: 10px 15px;
    border-radius: 8px;
    cursor: pointer;
    color: #002c4b;
    display: flex;
    align-items: center;
  `;

  const ArrowImage = styled.img`
    width: 25px;
    height: 5.87px;
    margin-left: 5px;
  `;

  const PageTopBtn = styled.div`
    position: absolute;
    flex-direction: column;
    display: flex;
    align-items: center;
    text-align: center;
    background-color: #002c4b;
    font-size: 10px;
    color: #ffffff;
    padding: 5px 8px;
    border-radius: 8px 0 0 0;
    right: 0;
    bottom: 0;
    cursor: pointer;
  `;

  const UnderText = styled.p`
    font-size: 10px;
    color: #ffffff;
  `;

  const ArrowTopIcon = styled.img`
    width: 7px;
  `;

  const scrollToTop = () => {
    scroll.scrollToTop({
      duration: 1000,
      smooth: "easeInOutQuart",
    });
  };

  return (
    <TopMiddleMainContainer>
      <TitleImage src="/assets/img/top_site_name.png" />
      <Text>KAMUY LUMINA SPECIAL SITE</Text>
      <BtnContainer>
        <OfficialBtn>
          オフィシャルサイト
          <ArrowImage
            src="/assets/img/arrow_right_wihte.png"
            alt="arrow_right_white"
          />
        </OfficialBtn>
        <TicketBtn>
          チケット購入はコチラ
          <ArrowImage src="/assets/img/arrow_right.png" alt="arrow_right" />
        </TicketBtn>
      </BtnContainer>
      <UnderText>COPYRIGHT COPYRIGHT COPYRIGHT COPYRIGHT</UnderText>
      <PageTopBtn className="scroll-to-top-button" onClick={scrollToTop}>
        <ArrowTopIcon src="/assets/img/arrow_top.png" />
        PAGE
        <br />
        TOP
      </PageTopBtn>
    </TopMiddleMainContainer>
  );
}
