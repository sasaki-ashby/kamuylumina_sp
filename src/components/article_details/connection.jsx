import React from "react";
import styled from "styled-components";

const Container = styled.div`
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: #002c4b;
  width: 100%;
`;

const ArticleContainer = styled.div`
  display: flex;
  align-items: center;
  padding: 60px 233px;

  @media screen and (max-width: 768px) {
    display: flex;
    align-items: center;
    flex-direction: column;
    padding: 10px;
  }
`;

const ImgContainer = styled.div`
  display: flex;
  align-items: center;
  flex-direction: column;
  @media screen and (max-width: 768px) {
    display: flex;
    align-items: center;
    flex-direction: unset;
    padding: 0px;
    margin: 10px 0;
  }
`;

const Title = styled.p`
  font-family: "Noto Sans CJK JP", sans-serif;
  color: #ffffff;
  font-size: 30px;
  margin-bottom: 15px;
`;

const SubTitle = styled.p`
  font-family: "Poppins", sans-serif;
  color: #ffffff;
  font-size: 11px;
`;

const ArticleImage = styled.img`
  height: 162px;
  margin: 0 25px;

  @media screen and (max-width: 768px) {
    width: 150px;
    height: 90px;
  }
`;

const Text = styled.p`
  font-family: "Noto Sans CJK JP", sans-serif;
  color: #ffffff;
  font-size: 13px;
  text-align: left;
  width: 260px;
  @media screen and (max-width: 768px) {
    display: flex;
    align-items: center;
    flex-direction: unset;
    padding: 0px;
    margin: 20px 0;
  }
`;

export default function Connection() {
  return (
    <Container>
      <Title>関連記事</Title>
      <SubTitle>RELATED ARTICLES</SubTitle>
      <ArticleContainer>
        <ImgContainer>
          <ArticleImage src="/assets/article/article_card1.png" />
          <Text>今回の舞台は、北海道、阿寒摩周国立公園にある阿寒湖。</Text>
        </ImgContainer>
        <ImgContainer>
          <ArticleImage src="/assets/article/article_card2.png" />
          <Text>今回の舞台は、北海道、阿寒摩周国立公園にある阿寒湖。</Text>
        </ImgContainer>
        <ImgContainer>
          <ArticleImage src="/assets/article/article_card3.png" />
          <Text>今回の舞台は、北海道、阿寒摩周国立公園にある阿寒湖。</Text>
        </ImgContainer>
      </ArticleContainer>
    </Container>
  );
}
