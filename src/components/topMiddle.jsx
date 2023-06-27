import React from "react";
import styled from "styled-components";

const TopMiddleContainer = styled.div`
  height: 768px;
  max-width: 1366px;
  margin: auto;
`;

const UpperRow = styled.div`
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
`;

const MiddleImage1 = styled.img`
  background-color: #ffffff;
  height: 447.73px;
  width: 730px;
  margin: 40px;
`;

const Title = styled.p`
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 30px;
  color: #002c4b;
`;

const Text1 = styled.span`
  font-size: 14px;
  line-height: 36px;
  color: #002c4b;
  margin-top: 60px;
`;

const MobileBtn = styled.div`
  writing-mode: vertical-rl;
  background-color: #002c4b;
  display: flex;
  justify-content: center;
  color: #ffffff;
  font-size: 10px;
  font-weight: 600;
  padding: 5px 12px;
  border-radius: 5px;
  margin-right: 20px;
  cursor: pointer;
`;

const LowrRowContainer = styled.div`
  display: flex;
  justify-content: center;
  width: 70%;
`;

const Text2 = styled.p`
  display: flex;
  text-align: left;
  font-size: 14px;
  color: #002c4b;
  line-height: 36px;
`;

const Text3 = styled.span`
  display: flex;
  font-size: 12px;
  color: #002c4b;
`;

const SmartfonImages = styled.img`
  position: absolute;
  display: flex;
  font-size: 12px;
  color: #002c4b;
  top: 400px;
  right: 80px;
  height: 400px;
`;

export default function TopMiddle() {
  return (
    <TopMiddleContainer>
      <UpperRow>
        <MiddleImage1 src="assets/img/top2.png" />
        <div>
          <Title>世界中のゲストに楽しんでいただくために…</Title>
          <br />
          <Text1>
            冒険への入り口となるウェルカムエリアでは
            <br />
            日本語、英語、中国語の3言語で
            <br />
            カムイルミナの世界への案内動画をご用意しております。
            <br />
            カムイの世界へ旅立つ前に是非しっかりとご覧ください。
          </Text1>
        </div>
        <SmartfonImages src="/assets/img/smartfons.png" alt="smartfons" />
      </UpperRow>
      <LowrRowContainer>
        <MobileBtn>MOBILE　APPS</MobileBtn>
        <div>
          <Text2>
            各ゾーンでどのように物語が展開しているのかをより楽しんでいただくために、
            <br />
            英語、中国語に対応したモバイルアプリをご用意しております。
            <br />
            是非、入口でアプリをダウンロードしてからカムイルミナの世界へ進んでください。
          </Text2>
          <Text3>※スマホケースのレンタルをご用意しています。</Text3>
        </div>
      </LowrRowContainer>
    </TopMiddleContainer>
  );
}
