import React from "react";
import Home from "./Home";
import Posts from "./Posts"
import Navbar from "../common/Navbar";
import { Routes,Route } from 'react-router-dom';
const Pages = () => {
  return (
    <>
     <Navbar/>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/posts" element={<Posts />} />
      </Routes>
    </>
  );
};

export default Pages;
