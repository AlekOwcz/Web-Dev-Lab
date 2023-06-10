import React, { useState } from "react"

export default function NewTask(props) {
    const [newTask, setTask] = useState('')
    const addNewTask = () => {
        if(newTask !== ''){
            props.onNewTask({text: newTask, isCompleted: false})
            setTask('')

        }
    }
    const handleEnter = (event) => {
        if (event.key === 'Enter'){
            addNewTask()
        }
    }
    return(
    <>
        <input type="text" value={newTask} onChange={(e) => setTask(e.target.value)} onKeyDown={handleEnter}/>
        <button onClick={addNewTask}>Add</button>
    </>
    )
}