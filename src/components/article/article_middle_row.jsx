import React from "react";
import styled from "styled-components";

const MiddleMainContainer = styled.div`
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 50px;
`;

const MiddleContainer = styled.div`
  display: flex;
  justify-content: space-around;
  width: 900px;
  padding: 25px;
  background-color: #f5f8fc;
`;

const Row1 = styled.div`
  flex-direction: column;
  display: flex;
  justify-content: flex-start;
  align-items: center;
`;

const Row2 = styled.div``;
const Row3 = styled.div``;
const Row4 = styled.div``;

const TextAll = styled.p`
  color: #002c4b;
  font-size: 13px;
  border-bottom: 1px solid #a4b1ba;
  padding-bottom: 10px;
  cursor: pointer;
`;

const Text = styled.p`
  color: #002c4b;
  font-size: 13px;
  cursor: pointer;
`;

const SpotContainer = styled.div``;
const Line = styled.div`
  display: flex;
  justify-content: space-between;
`;

const SpotCard = styled.p`
  flex-direction: column;
`;

const MoreBtn = styled.div`
  margin-top: 20px;
  margin-bottom: 50px;
`;

const IconImg = styled.img`
  width: 116px;
  cursor: pointer;
`;

export default function ArticleMiddleRow() {
  return (
    <MiddleMainContainer>
      <MiddleContainer>
        <Row1>
          <TextAll>すべて</TextAll>
        </Row1>
        <Row2>
          <Text>おすすめスポット</Text>
          <Text>まちの自然</Text>
          <Text>まちの歴史</Text>
        </Row2>
        <Row3>
          <Text>まちの食文化</Text>
          <Text>アクティビティ</Text>
          <Text>季節別の楽しみ</Text>
        </Row3>
        <Row4>
          <Text>まちの恒例行事</Text>
          <Text>人の暮らし紹介</Text>
          <Text>ルミナスタッフのススメ</Text>
        </Row4>
      </MiddleContainer>

      <SpotContainer>
        <Line>
          <SpotCard>
            <img src="/assets/article/article_spot.png" alt="" />
          </SpotCard>
          <SpotCard>
            <img src="/assets/article/article_spot.png" alt="" />
          </SpotCard>
          <SpotCard>
            <img src="/assets/article/article_spot.png" alt="" />
          </SpotCard>
        </Line>

        <Line>
          <SpotCard>
            <img src="/assets/article/article_spot.png" alt="" />
          </SpotCard>
          <SpotCard>
            <img src="/assets/article/article_spot.png" alt="" />
          </SpotCard>
          <SpotCard>
            <img src="/assets/article/article_spot.png" alt="" />
          </SpotCard>
        </Line>

        <Line>
          <SpotCard>
            <img src="/assets/article/article_spot.png" alt="" />
          </SpotCard>
          <SpotCard>
            <img src="/assets/article/article_spot.png" alt="" />
          </SpotCard>
          <SpotCard>
            <img src="/assets/article/article_spot.png" alt="" />
          </SpotCard>
        </Line>

        <Line>
          <SpotCard>
            <img src="/assets/article/article_spot.png" alt="" />
          </SpotCard>
          <SpotCard>
            <img src="/assets/article/article_spot.png" alt="" />
          </SpotCard>
          <SpotCard>
            <img src="/assets/article/article_spot.png" alt="" />
          </SpotCard>
        </Line>
      </SpotContainer>
      <MoreBtn>
        <IconImg src="/assets/article/article_btn_icon.png" alt="" />
      </MoreBtn>
    </MiddleMainContainer>
  );
}
