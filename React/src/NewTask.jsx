import React, { useState } from "react"

export default function NewTask(props) {
    const [newTask, setTask] = useState('')
    const addNewTask = () => {
        if(newTask !== ''){
            props.onNewTask({text: newTask, isCompleted: false})
            setTask('')

        }
    }
    return(
    <>
        <input type="text" value={newTask} onChange={(e) => setTask(e.target.value)}/>
        <button onClick={addNewTask}>Add</button>
    </>
    )
}