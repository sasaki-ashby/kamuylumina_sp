import React from "react";
import Header from "../components/article/header";
import styled from "styled-components";
import ArticleMiddleRow from "../components/article/article_middle_row";
import ArticleFotter from "../components/article/article_fotter";

const ArticleMainContainer = styled.div`
  display: flex;
  flex-direction: column;
  align-items: center;
`;

const ArticleTitle = styled.p`
  flex-direction: column;
  font-size: 30px;
  color: #002c4b;
  margin-bottom: 15px;
  font-weight: 600;
  font-family: "Noto Serif JP", serif;
`;
const SubText = styled.p`
  font-size: 11px;
  color: #002c4b;
  font-family: "Poppins", sans-serif;
`;

export default function Article() {
  return (
    <>
      <Header />
      <ArticleMainContainer>
        <ArticleTitle>記事一覧</ArticleTitle>
        <SubText>ARTICLE LIST</SubText>
        <ArticleMiddleRow />
        <ArticleFotter />
      </ArticleMainContainer>
    </>
  );
}
