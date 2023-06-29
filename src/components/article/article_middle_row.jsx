import React from "react";
import styled from "styled-components";
import { spots, spots2, spots3, spots4 } from "../../constants/article";

const MiddleMainContainer = styled.div`
  margin-top: 50px;
`;

const Container = styled.div`
  display: flex;
  flex-direction: column;
  align-items: center;
  @media screen and (max-width: 768px) {
    max-width: 350px;
    overflow: hidden;
  }
`;

const MiddleContainer = styled.div`
  display: flex;
  width: 900px;
  padding: 15px 8px;
  border-radius: 8px;
  margin-bottom: 35px;
  justify-content: space-around;
  background-color: #f5f8fc;

  @media screen and (max-width: 768px) {
    display: none;
  }
`;

const MiddleContainerSP = styled.div`
  display: none;

  @media screen and (max-width: 768px) {
    display: flex;
    width: 339px;
    padding: 15px 8px;
    border-radius: 8px;
    margin-bottom: 35px;
    justify-content: space-around;
    background-color: #f5f8fc;
  }
`;

const TextContainer = styled.div`
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;

  @media screen and (max-width: 768px) {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
`;

const TextAll = styled.p`
  color: #002c4b;
  font-family: "Noto Serif JP", serif;
  font-size: 13px;
  border-bottom: 1px solid #a4b1ba;
  padding-bottom: 10px;
  cursor: pointer;
`;

const Text = styled.p`
  color: #002c4b;
  font-family: "Noto Serif JP", serif;
  font-size: 13px;
  cursor: pointer;
`;

const SpotContainer = styled.div`
  width: 806px;
  @media screen and (max-width: 768px) {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
  }
`;

const Line = styled.div`
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 20px;
  @media screen and (max-width: 768px) {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
`;

const SpotCard = styled.div`
  flex-direction: column;
  margin: 0 25px;
`;

const Tag = styled.div`
  display: flex;
  justify-content: center;
  padding: 3px 6px;
  margin-bottom: 10px;
  font-size: 11px;
  border-radius: 8px;
  width: 114px;
  font-family: "Noto Serif JP", serif;
  background-color: #f5f8fc;
  color: #002c4b;

  @media screen and (max-width: 768px) {
    display: flex;
  }
`;

const SpotImage = styled.img`
  width: 270px;
  height: 162px;
  object-fit: cover;
  border-radius: 8px;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
  cursor: pointer;

  @media screen and (max-width: 768px) {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 340px;
    height: 204px;
  }
`;

const SpotText = styled.p`
  font-family: "Noto Serif JP", serif;
  color: #002c4b;
  font-size: 13px;
  padding: 8px;

  @media screen and (max-width: 768px) {
    padding: 8px;
  }
`;

const MoreBtn = styled.div`
  display: flex;
  justify-content: center;
  margin-top: 10px;
  margin-bottom: 50px;
  cursor: pointer;
`;

const BtnText = styled.p`
  font-size: 11px;
  font-family: "Noto Serif JP", serif;
  border-bottom: 1px solid #a4b1ba;
  padding-bottom: 5px;
`;

const Plus = styled.span`
  font-size: 15px;
  margin-left: 4px;
  color: #a4b1ba;
`;

export default function ArticleMiddleRow() {
  return (
    <MiddleMainContainer>
      <Container>
        <MiddleContainer>
          <TextContainer>
            <TextAll>すべて</TextAll>
          </TextContainer>
          <TextContainer>
            <Text>おすすめスポット</Text>
            <Text>まちの自然</Text>
            <Text>まちの歴史</Text>
          </TextContainer>
          <TextContainer>
            <Text>まちの食文化</Text>
            <Text>アクティビティ</Text>
            <Text>季節別の楽しみ</Text>
          </TextContainer>
          <TextContainer>
            <Text>まちの恒例行事</Text>
            <Text>人の暮らし紹介</Text>
            <Text>ルミナスタッフのススメ</Text>
          </TextContainer>
        </MiddleContainer>

        <MiddleContainerSP>
          <TextContainer>
            <TextAll>すべて</TextAll>
            <Text>まちの食文化</Text>
            <Text>まちの自然</Text>
            <Text>人の暮らし紹介</Text>
            <Text>季節別の楽しみ</Text>
          </TextContainer>

          <TextContainer>
            <Text>おすすめスポット</Text>
            <Text>まちの恒例行事</Text>
            <Text>アクティビティ</Text>
            <Text>まちの歴史</Text>
            <Text>ルミナスタッフのススメ</Text>
          </TextContainer>
        </MiddleContainerSP>

        <SpotContainer>
          <Line>
            {spots.map((spot, index) => (
              <SpotCard key={index}>
                <Tag>おすすめスポット</Tag>
                <SpotImage src={spot.src} alt={spot.alt} />
                <SpotText>{spot.text}</SpotText>
              </SpotCard>
            ))}
          </Line>
          <Line>
            {spots2.map((spot, index) => (
              <SpotCard key={index}>
                <Tag>おすすめスポット</Tag>
                <SpotImage src={spot.src} alt={spot.alt} />
                <SpotText>{spot.text}</SpotText>
              </SpotCard>
            ))}
          </Line>
          <Line>
            {spots3.map((spot, index) => (
              <SpotCard key={index}>
                <Tag>おすすめスポット</Tag>
                <SpotImage src={spot.src} alt={spot.alt} />
                <SpotText>{spot.text}</SpotText>
              </SpotCard>
            ))}
          </Line>
          <Line>
            {spots4.map((spot, index) => (
              <SpotCard key={index}>
                <Tag>おすすめスポット</Tag>
                <SpotImage src={spot.src} alt={spot.alt} />
                <SpotText>{spot.text}</SpotText>
              </SpotCard>
            ))}
          </Line>
        </SpotContainer>
      </Container>
      <MoreBtn>
        <BtnText>
          VIEW MORE <Plus>+</Plus>
        </BtnText>
      </MoreBtn>
    </MiddleMainContainer>
  );
}
