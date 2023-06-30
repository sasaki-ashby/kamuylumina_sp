import React from "react";
import Header from "../components/article_details/header";
import styled from "styled-components";
import DetailsMiddle from "../components/article_details/details_middle";
import Connection from "../components/article_details/connection";
import ArticleFotter from "../components/article/article_fotter";

const MainContainer = styled.div`
  display: flex;
  flex-direction: column;
  align-items: center;
  @media screen and (max-width: 768px) {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
`;

const UpperContainer = styled.div`
  position: relative;
  display: flex;
  justify-content: center;
  width: 100%;
  @media screen and (max-width: 768px) {
  }
`;

const UpperImage = styled.img`
  height: 300px;
  object-fit: cover;
  width: 100%;
  @media screen and (max-width: 768px) {
    height: 150px;
  }
`;

const MiddlesContainer = styled.div`
  position: absolute;
  border-radius: 8px 8px 0 0;
  height: 40px;
  width: 1100px;
  top: 260px;
  background-color: #ffffff;
  @media screen and (max-width: 768px) {
    width: 339px;
    top: 110px;
  }
`;

export default function ArticleDetails() {
  return (
    <>
      <Header />
      <MainContainer>
        <UpperContainer>
          <UpperImage src="/assets/article_details/article_details2.png" />
          <MiddlesContainer></MiddlesContainer>
        </UpperContainer>
        <DetailsMiddle />
        <Connection />
        <ArticleFotter />
      </MainContainer>
    </>
  );
}
