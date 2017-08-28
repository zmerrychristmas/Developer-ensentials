<?php
class ShapeFactory {

   //use getShape method to get object of type shape
   public function getShape($shapeType){
      if($shapeType == null){
         return null;
      }
      if($shapeType = "CIRCLE"){
         return new Circle();

      } else if($shapeType = "RECTANGLE"){
         return new Rectangle();

      } else if($shapeType = "SQUARE"){
         return new Square();
      }

      return null;
   }
}