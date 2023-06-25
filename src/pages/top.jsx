import React from "react";
import styled from "styled-components";

import Header from "../components/header";

const Headline = styled.div`
  background-color: #00000027;
`;

export default function top() {
  return (
    <div>
      <Headline>
        <Header />
      </Headline>
    </div>
  );
}
