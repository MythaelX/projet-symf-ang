import { Component, OnInit } from '@angular/core';
import { HttpClient, HttpHeaders} from '@angular/common/http';
import { timeout } from 'q';
import { isNull } from 'util';

//import { BrowserModule }    from '@angular/platform-browser';
//import { Observable } from 'rxjs';
//import { Injectable } from '@angular/core';

//@Injectable()
@Component({
  selector: 'app-list',
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.css']
})
export class ListComponent implements OnInit {

  constructor(private httpClient: HttpClient){}

  list: any;

  ngOnInit() {
    this.httpClient.get('http://127.0.0.1:8000/api/', {responseType: 'json'}).subscribe(
      (response) => {
        this.list = this.responseSanitizer(response);
      },
      (error) => {console.log('Erreur ! : ' + error);
      }
    );
  }


  responseSanitizer(list: any){
    list.forEach((element) => {
      if(isNull(element[0].created)){
        element[0].created = {date: new Date(null)};
      }

      if(isNull(element[0].dateValidation)){
        element[0].dateValidation = {date: new Date(null)};
      }

      if(isNull(element[0].updated)){
        element[0].updated = {date: new Date(null)};
      }
    });
    return list;
  }
}