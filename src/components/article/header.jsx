import React, { useState } from "react";
import styled from "styled-components";

const HeaderContainer = styled.div`
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  padding: 30px;
  background-color: #002c4b;
  @media screen and (max-width: 768px) {
    display: flex;
    justify-content: space-between;
    padding: 10px;
  }
`;

const HeaderTitle = styled.p`
  font-size: 14px;
  font-family: "Poppins", sans-serif;
  color: white;
`;

const DetailContainer = styled.div`
  display: flex;
  justify-content: space-evenly;

  @media screen and (max-width: 1100px) {
    display: none;
  }
`;

const Details = styled.p`
  position: relative;
  font-family: "Poppins", sans-serif;
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

  @media screen and (max-width: 1100px) {
    display: none;
  }
`;

const LangBtnsContainer = styled.div`
  display: flex;
  border-radius: 8px;
  height: 40px;
  margin-right: 30px;
`;

const LangBtn1 = styled.button`
  font-family: "Noto Sans CJK JP", sans-serif;
  background: ${({ active }) => (active ? "white" : "transparent")};
  border: 1px solid white;
  border-radius: 8px 0 0 8px;
  color: ${({ active }) => (active ? "teal" : "white")};
  cursor: pointer;
`;

const LangBtn2 = styled.button`
  font-family: "Noto Sans CJK JP", sans-serif;
  background: ${({ active }) => (active ? "white" : "transparent")};
  border: 1px solid white;
  border-right: none;
  border-left: none;
  color: ${({ active }) => (active ? "teal" : "white")};
  cursor: pointer;
`;

const LangBtn3 = styled.button`
  font-family: "Noto Sans CJK JP", sans-serif;
  background: ${({ active }) => (active ? "white" : "transparent")};
  border: 1px solid white;
  border-radius: 0 8px 8px 0;
  color: ${({ active }) => (active ? "teal" : "white")};
  cursor: pointer;
`;

const OfficialBtn = styled.div`
  font-family: "Noto Sans CJK JP", sans-serif;
  color: white;
  font-size: 10px;
  margin-right: 20px;
  padding: 10px 15px;
  border-radius: 8px;
  cursor: pointer;
`;

const TicketBtn = styled.div`
  font-family: "Noto Sans CJK JP", sans-serif;
  background-color: #ffffff;
  font-size: 10px;
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

const HamburgerIcon = styled.div`
  display: none;

  @media screen and (max-width: 1100px) {
    display: flex;
    flex-direction: column;
    cursor: pointer;
    padding: 10px;
  }
`;

const Line = styled.div`
  width: 30px;
  height: 1px;
  background-color: #ffffff;
  margin: 4px 0;
`;

export default function Header() {
  const [selectedDetail, setSelectedDetail] = useState("REVIEW");
  const [activeBtn, setActiveBtn] = useState("langBtn1");

  const handleDetailClick = (detail) => {
    setSelectedDetail(detail);
  };

  return (
    <HeaderContainer>
      <HeaderTitle>KAMUY&nbsp;LUMINA&nbsp;SPECIAL&nbsp;SITE</HeaderTitle>
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

      <div className="navbar">
        <HamburgerIcon>
          <Line />
          <Line />
          <Line />
        </HamburgerIcon>
      </div>
    </HeaderContainer>
  );
}
