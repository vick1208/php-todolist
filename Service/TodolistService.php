<?php

namespace Service;

interface TodolistService{
    function showTodo():void;
    function addTodo(string $todo):void;
    function removeTodo(int $num):void;
}