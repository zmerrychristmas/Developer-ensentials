<?php

public class ShapeFactory extends AbstractFactory {

   public function getShape($shapeType){

      if($shapeType == null){
         return null;
      }

      if($shapeType = "CIRCLE"){
         return new Circle();

      }else if($shapeType = "RECTANGLE"){
         return new Rectangle();

      }else if($shapeType = "SQUARE"){
         return new Square();
      }

      return null;
   }

   public function getColor($color) {
      return null;
   }
}