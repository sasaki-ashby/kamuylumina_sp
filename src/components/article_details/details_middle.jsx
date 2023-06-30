import React, { useState } from "react";
import styled from "styled-components";

const MainContainer = styled.div`
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
`;

const MiddleContainer = styled.div`
  width: 700px;

  @media screen and (max-width: 768px) {
    max-width: 290px;
    overflow: hidden;
  }
`;

const MiddleTitle = styled.p`
  color: #002c4b;
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 2px;
  margin-top: 0;
  font-family: "Noto Sans CJK JP", sans-serif;

  @media screen and (max-width: 768px) {
    font-size: 18px;
  }
`;

const DateText = styled.p`
  color: #002c4b;
  font-size: 13px;
`;

const TagAndLangContainer = styled.div`
  display: flex;
  justify-content: space-between;
  @media screen and (max-width: 768px) {
    display: flex;
    justify-content: unset;
    flex-direction: column;
    align-items: flex-start;
  }
`;

const LangContaner = styled.div`
  display: flex;
  align-items: center;
`;

const LangText1 = styled.p`
  font-size: 10px;
  padding: 3px;
  color: ${({ active }) => (active ? "#002c4b" : "#A4B1BA")};
  border-bottom: ${({ active }) => (active ? "1px solid #002c4b" : "none")};
  margin: 0 2px;
  font-family: "Poppins", sans-serif;
  cursor: pointer;
`;

const LangText2 = styled.p`
  font-size: 10px;
  color: ${({ active }) => (active ? "#002c4b" : "#A4B1BA")};
  border-bottom: ${({ active }) => (active ? "1px solid #002c4b" : "none")};
  margin: 0 10px;
  border-left: 1px solid #a4b1ba;
  border-right: 1px solid #a4b1ba;
  padding: 3px;
  font-family: "Poppins", sans-serif;
  letter-spacing: 3px;
  cursor: pointer;
`;

const LangText3 = styled.p`
  font-size: 10px;
  padding: 3px;
  color: ${({ active }) => (active ? "#002c4b" : "#A4B1BA")};
  border-bottom: ${({ active }) => (active ? "1px solid #002c4b" : "none")};
  margin: 0 2px;
  font-family: "Poppins", sans-serif;
  cursor: pointer;
`;

const LeftTitleContainer = styled.div`
  display: flex;
  align-items: center;

  @media screen and (max-width: 768px) {
    display: flex;
    justify-content: unset;
    flex-direction: column;
    align-items: center;
  }
`;

const TagContainer = styled.div`
  display: flex;
`;
const Tag = styled.div`
  display: flex;
  padding: 8px;
  font-size: 11px;
  font-family: "Noto Sans CJK JP", sans-serif;
  align-items: center;
  color: #002c4b;
  background-color: #f5f8fc;
  margin: 6px;
  border-radius: 8px;
`;

const Line = styled.div`
  background-color: #e1e5e8;
  height: 2px;
  margin: 20px 0;
`;

const Title = styled.p`
  font-family: "Noto Sans CJK JP", sans-serif;
  color: #002c4b;
  font-size: 20px;
  font-weight: 600;
  @media screen and (max-width: 768px) {
    font-size: 16px;
  }
`;

const Text = styled.p`
  font-family: "Noto Sans CJK JP", sans-serif;
  color: #002c4b;
  text-align: left;
  font-size: 14px;
  margin: 25px 0;
  line-height: 25px;
  @media screen and (max-width: 768px) {
    font-size: 14px;
  }
`;

const Image1 = styled.img`
  height: 500px;
  margin-bottom: 25px;
  @media screen and (max-width: 768px) {
    width: 300px;
    height: 214.29px;
  }
`;

const Image2 = styled.img`
  height: 400px;
  margin-bottom: 25px;
  @media screen and (max-width: 768px) {
    width: 300px;
    height: 214.29px;
  }
`;

const ImgContainer = styled.div`
  background-color: #f5f8fc;
  padding: 50px 200px;
  margin: 25px 0 80px 0;

  @media screen and (max-width: 768px) {
    flex-direction: column;
    align-items: center;
  }
`;

const Image3 = styled.img`
  height: 400px;
  margin-bottom: 25px;
  @media screen and (max-width: 768px) {
    width: 300px;
    height: 214.29px;
  }
`;

export default function DetailsMiddle() {
  const [activeText, setActiveText] = useState("langText1");

  const handleTextClick = (text) => {
    setActiveText(text);
  };

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
            <TagContainer>
              <Tag>おすすめスポット</Tag>
              <Tag>まちの自然</Tag>
            </TagContainer>
          </LeftTitleContainer>
          <LangContaner>
            <LangText1
              active={activeText === "langText1"}
              onClick={() => handleTextClick("langText1")}
            >
              日本語
            </LangText1>
            <LangText2
              active={activeText === "langText2"}
              onClick={() => handleTextClick("langText2")}
            >
              ENGLISH
            </LangText2>
            <LangText3
              active={activeText === "langText3"}
              onClick={() => handleTextClick("langText3")}
            >
              繁体字
            </LangText3>
          </LangContaner>
        </TagAndLangContainer>
        <Line />
        <div>
          <Title>阿寒湖の森ナイトウォーク</Title>
          <Text>
            光と映像でインタラクティブな体験が楽しめる、ナイトアトラクション阿寒湖の森ナイトウォーク｢KAMUYLUMINA(カムイルミナ)｣！雄大な阿寒の自然の中を歩きながら、幻想的な世界を冒険するアトラクションです。開発を手がけたのはマドンナのスーパーボウル演出を担当するなど、カナダを拠点に世界で活躍するマルチメディア・エンターテイメント・カンパニー｢MomentFactory(モーメントファクトリー)｣。｢KAMUYLUMINA(カムイルミナ)｣は10作目にして、世界初となる国立公園開催のアトラクションです。アトラクションには、アイヌのエッセンスが盛りだくさん！
          </Text>
          <Image1
            src="/assets/article_details/article_details.png"
            alt="article_details"
          />
          <Title>リズムスティックで地面を打つ場面が多々登場</Title>
          <Text>
            森の中ではカケスやマリモのリズムに合わせて、リズムスティックで地面を打つ場面が多々登場します。｢あ、見て、リズムスティックが光ってる！｣｢わ、ほんとだ｣音を聞いてリズムに合わせて打ち、リズムを外しやすいカケスの助けになるためです。ちなみにこの各リズムは後々重要になるので、よく覚えておきましょう！
          </Text>
          <Image2
            src="/assets/article_details/article_details3.png"
            alt="article_details"
          />
        </div>
      </MiddleContainer>

      <ImgContainer>
        <Title>阿寒の森ナイトウォーク｢KAMUY LUMINA（カムイルミナ）｣</Title>
        <Text>
          北海道釧路市阿寒町阿寒湖温泉１丁目５−２０
          <br />
          阿寒アドベンチャーツーリズム TEL:0154-65-7121
        </Text>

        <Image3
          src="/assets/article_details/article_details4.png"
          alt="article_details"
        />
      </ImgContainer>
    </MainContainer>
  );
}
