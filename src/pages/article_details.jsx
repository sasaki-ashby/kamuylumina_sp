import React from "react";
import Header from "../components/article_details/header";
import styled from "styled-components";
import DetailsMiddle from "../components/article_details/details_middle";

const MainContainer = styled.div`
  display: flex;
  flex-direction: column;
  align-items: center;
`;

const UpperContainer = styled.div`
  position: relative;
  display: flex;
  justify-content: center;
  width: 100%;
`;

const UpperImage = styled.img`
  height: 300px;
  object-fit: cover;
  width: 100%;
`;

const MiddlesContainer = styled.div`
  position: absolute;
  border-radius: 8px;
  top: 260px;
  background-color: #ffffff;
  width: 1100px;
`;

export default function ArticleDetails() {
  return (
    <>
      <Header />
      <MainContainer>
        <UpperContainer>
          <UpperImage src="/assets/article_details/article_details2.png" />
          <MiddlesContainer>
            <DetailsMiddle />
          </MiddlesContainer>
        </UpperContainer>
      </MainContainer>
    </>
  );
}
