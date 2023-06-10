import React, { useState } from 'react'
import './App.css'
import NewTask from './NewTask'
import Filter from './Filter'
import ToDoList from './ToDoList'


function App() {
  const [tasks, setTask] = useState([

  ])

  const [hideCompleted, setHideCompleted] = useState(false)

  const addTask = (newTask) => {
    const newTasksList = [...tasks, {...newTask, id: new Date().getTime()}]
    setTask(newTasksList)
  }

  const toggleTaskCompleted = (taskId) => {
    const updatedTasksList = tasks.map((task) => 
      task.id === taskId ? {...task, isCompleted: !task.isCompleted} : task)
    setTask(updatedTasksList)
  }

  const visibleTaskList = hideCompleted ? tasks.filter((task) => !task.isCompleted) : tasks

  return (
    <>
      <h2>Welcome to my To Do List!</h2>
      <div className='todolist'>
        <Filter hideCompleted={hideCompleted} ontoggleHideCompleted={() => setHideCompleted(!hideCompleted)} />
        <hr/>
        <ToDoList tasks={visibleTaskList} onToggleTaskCompleted={toggleTaskCompleted} />
        <hr/>
        <NewTask onNewTask={addTask} />
      </div>
    </>
  )
}

export default App
