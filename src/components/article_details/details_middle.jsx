import React, { useState } from "react";
import styled from "styled-components";

const MainContainer = styled.div`
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 25px;
`;

const MiddleContainer = styled.div``;

const MiddleTitle = styled.p`
  color: #002c4b;
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 2px;
`;

const DateText = styled.p`
  color: #002c4b;
  font-size: 13px;
`;

const TagAndLangContainer = styled.div`
  display: flex;
  justify-content: space-between;
`;

const LangContaner = styled.div`
  display: flex;
  align-items: center;
`;

const LangText1 = styled.p`
  font-size: 10px;
  color: ${({ active }) => (active ? "#002c4b" : "#A4B1BA")};
  margin: 0 5px;
  cursor: pointer;
`;

const LangText2 = styled.p`
  font-size: 11px;
  color: ${({ active }) => (active ? "#002c4b" : "#A4B1BA")};
  margin: 0 5px;
  border-left: 1px solid #a4b1ba;
  border-right: 1px solid #a4b1ba;
  padding: 0 8px;
  cursor: pointer;
`;

const LangText3 = styled.p`
  font-size: 10px;
  color: ${({ active }) => (active ? "#002c4b" : "#A4B1BA")};
  margin: 0 5px;
  cursor: pointer;
`;

const LeftTitleContainer = styled.div`
  display: flex;
  align-items: center;
`;

const Tag = styled.div`
  display: flex;
  padding: 5px;
  font-size: 11px;
  align-items: center;
  color: #002c4b;
  background-color: #f5f8fc;
  margin: 10px;
  border-radius: 8px;
`;

export default function DetailsMiddle() {
  const [selected, setSelected] = useState("lantText1");

  return (
    <MainContainer>
      <MiddleContainer>
        <MiddleTitle>
          カムイルミナへ行く前に！
          <br />
          アトラクションを100倍楽しくする直前情報
        </MiddleTitle>
        <TagAndLangContainer>
          <LeftTitleContainer>
            <DateText>2023.07.20</DateText>
            <Tag>おすすめスポット</Tag>
            <Tag>街の自然</Tag>
          </LeftTitleContainer>
          <LangContaner>
            <LangText1
              active={selected === "lantText1"}
              onClick={() => setSelected("lantText1")}
            >
              日本語
            </LangText1>
            <LangText2
              active={selected === "lantText2"}
              onClick={() => setSelected("langText2")}
            >
              ENGLISH
            </LangText2>
            <LangText3
              active={selected === "lantText3"}
              onClick={() => setSelected("langText3")}
            >
              繁体字
            </LangText3>
          </LangContaner>
        </TagAndLangContainer>
      </MiddleContainer>
    </MainContainer>
  );
}
