import { useEffect } from "react";

export const useMilkCollectionFetch = (url, callback, callback1, callback2)=>{

    const getData = async ()=>{
        const response = await fetch(url);
        const data = await response.json();
        callback(data[0]);
        callback1(data[1]);
        callback2(data[2])
        console.log(data[0]);
        // console.log(data[1]);
        // console.log(data[2]);
    }

    useEffect(()=>{
        getData();
    }, [])
}