import { Component, OnInit } from '@angular/core';
import {Deplacement} from '../util/Deplacement.ts';

@Component({
  selector: 'app-form-deplacement',
  templateUrl: './form-deplacement.component.html',
  styleUrls: ['./form-deplacement.component.css']
})
export class FormDeplacementComponent implements OnInit {

  deplacement: Deplacement;
  constructor() { }

  ngOnInit() {
    this.deplacement=new Deplacement(0,0);
  }

  register() {
    console.log(this.deplacement)
    //this.httpClient.post('http://127.0.0.1:8000/api/', this.deplacement).subscribe();
   }
}
