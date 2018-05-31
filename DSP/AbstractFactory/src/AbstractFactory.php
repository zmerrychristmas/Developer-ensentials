<?php

abstract class AbstractFactory {
    abstract Color getColor($color);
    abstract Shape getShape($shape);
}