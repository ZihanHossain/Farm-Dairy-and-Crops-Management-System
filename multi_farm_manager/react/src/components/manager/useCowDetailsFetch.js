import { useEffect } from "react";

export const useCowDetailsFetch = (url, callback, callback1, callback2, callback3, callback4, callback5)=>{

    const getData = async ()=>{
        const response = await fetch(url);
        const data = await response.json();
        callback(data[0]);
        callback1(data[1]);
        if(data[2] == null)
        {
            callback2('False');
        }
        else{
            callback2('True');
        }
        callback3(data[3]);
        callback4(data[4]);
        callback5(data[5]);
    }

    useEffect(()=>{
        getData();
    }, [])
}