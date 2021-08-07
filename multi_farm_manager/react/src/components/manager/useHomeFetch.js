import { useEffect } from "react";

export const useHomeFetch = (url, callback, callback1, callback2, callback3)=>{

    const getData = async ()=>{
        const response = await fetch(url);
        const data = await response.json();
        console.log(data[0]);
        callback(data[0]);
        callback1(data[1]);
        callback2(data[2]);
        callback3(data[3]);
    }

    useEffect(()=>{
        getData();
    }, [])
}