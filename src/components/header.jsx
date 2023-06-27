import React, { useState } from "react";
import styled from "styled-components";

const HeaderContainer = styled.div`
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  padding: 30px;
`;

const HeaderTitle = styled.p`
  font-size: large;
  font-weight: 400;
  color: white;
`;

const DetailContainer = styled.div`
  display: flex;
  justify-content: space-evenly;
`;

const Details = styled.p`
  position: relative;
  cursor: pointer;
  margin-right: 20px;
  color: white;

  &:before {
    content: "";
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: white;
    visibility: ${({ selected }) => (selected ? "visible" : "hidden")};
  }
`;

const RightSideBtn = styled.div`
  display: flex;
  justify-content: space-evenly;
  align-items: center;
`;

const LangBtnsContainer = styled.div`
  display: flex;
  border-radius: 8px;
  border: 2px solid white;
  height: 40px;
  margin-right: 30px;
`;

const LangBtn1 = styled.button`
  background: ${({ active }) => (active ? "white" : "transparent")};
  border: none;
  color: ${({ active }) => (active ? "teal" : "white")};
  cursor: pointer;
`;

const LangBtn2 = styled.button`
  background: ${({ active }) => (active ? "white" : "transparent")};
  border: 1px solid white;
  border-top: none;
  border-bottom: none;
  color: ${({ active }) => (active ? "teal" : "white")};
  cursor: pointer;
`;

const LangBtn3 = styled.button`
  background: ${({ active }) => (active ? "white" : "transparent")};
  border: none;
  color: ${({ active }) => (active ? "teal" : "white")};
  cursor: pointer;
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

export default function Header() {
  const [selectedDetail, setSelectedDetail] = useState("REVIEW");
  const [activeBtn, setActiveBtn] = useState("langBtn1");

  const handleDetailClick = (detail) => {
    setSelectedDetail(detail);
  };
  return (
    <HeaderContainer>
      <HeaderTitle>KAMUY LUMINA SPECIAL SITE</HeaderTitle>
      <DetailContainer>
        <Details
          selected={selectedDetail === "REVIEW"}
          onClick={() => handleDetailClick("REVIEW")}
        >
          REVIEW
        </Details>
        <Details
          selected={selectedDetail === "ACCESS"}
          onClick={() => handleDetailClick("ACCESS")}
        >
          ACCESS
        </Details>
        <Details
          selected={selectedDetail === "GALLERY"}
          onClick={() => handleDetailClick("GALLERY")}
        >
          GALLERY
        </Details>
      </DetailContainer>
      <RightSideBtn>
        <LangBtnsContainer>
          <LangBtn1
            active={activeBtn === "langBtn1"}
            onClick={() => setActiveBtn("langBtn1")}
          >
            日本語
          </LangBtn1>
          <LangBtn2
            active={activeBtn === "langBtn2"}
            onClick={() => setActiveBtn("langBtn2")}
          >
            ENGLISH
          </LangBtn2>
          <LangBtn3
            active={activeBtn === "langBtn3"}
            onClick={() => setActiveBtn("langBtn3")}
          >
            繁体字
          </LangBtn3>
        </LangBtnsContainer>

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
      </RightSideBtn>
    </HeaderContainer>
  );
}
