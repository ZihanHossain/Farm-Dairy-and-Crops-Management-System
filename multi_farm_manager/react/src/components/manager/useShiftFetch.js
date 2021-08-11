import { useEffect } from "react";

export const useShiftFetch = (url, callback)=>{

    const getData = async ()=>{
        const response = await fetch(url);
        const data = await response.json();
        console.log(data);
        callback(data);
    }

    useEffect(()=>{
        getData();
    }, [])
}