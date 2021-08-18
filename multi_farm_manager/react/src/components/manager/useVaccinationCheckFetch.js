import { useEffect } from "react";

export const useVaccinationCheckFetch = (url, callback, callback1, callback2)=>{

    const getData = async ()=>{
        const response = await fetch(url);
        const data = await response.json();
        callback(data[0]);
        if(data[1] !== null)
        {
            callback1(data[1].name);
        }
        else{
            callback1('Not Vaccinated');
        }
        if(data[2] !== null)
        {
            callback2(data[2].name);
        }
        else{
            callback2('Not Vaccinated');
        }
        console.log(data[0]);
        console.log(data[1]);
        console.log(data[2]);
    }

    useEffect(()=>{
        getData();
    }, [])
}