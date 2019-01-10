import { Component, OnInit } from '@angular/core';
import {DeplacementJour} from '../util/DeplacementJour.ts';
@Component({
  selector: 'app-form-deplacement-jour',
  templateUrl: './form-deplacement-jour.component.html',
  styleUrls: ['./form-deplacement-jour.component.css']
})
export class FormDeplacementJourComponent implements OnInit {

  deplacementJour: DeplacementJour;
  list: any;
  constructor() { }

  ngOnInit() {
    this.httpClient.get('http://127.0.0.1:8000/api/getTypeDeplacement', {responseType: 'json'}).subscribe(
      (response) => {
        this.list = response;
      },
      (error) => {console.log('Erreur ! : ' + error);
      }
    );
    this.deplacementJour=new DeplacementJour(0,0,0,0,0);
  }

  register() {
    console.log(this.deplacementJour);
    //this.httpClient.post('http://127.0.0.1:8000/api/', this.deplacement).subscribe();
   }
}
