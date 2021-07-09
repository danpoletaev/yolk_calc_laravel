import React from "react";
import './CalcButton.scss'

const CalcButton = ({text, handleClick, active }) => {
    console.log(active)
    return (
            <button className='calcButton' onClick={handleClick} style={active ? {background: "#005891", color: "#fff"} : {}}>
                {text}
            </button>
    )
}

export default CalcButton
