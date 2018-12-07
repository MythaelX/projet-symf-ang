import { Component, OnInit } from '@angular/core';
import { HttpClient, HttpHeaders} from '@angular/common/http';

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

  constructor(private httpClient: HttpClient) { }
  //articles$: Observable;
  variable: any;
  ngOnInit() {
    this.httpClient.get('http://127.0.0.1:8000/api/', {responseType: 'json'}).subscribe(
      (response) => {
        this.variable = response;
        console.log('response', this.variable);
      },
      (error) => {console.log('Erreur ! : ' + error);
      }
    );
  }

}
//https://jsonplaceholder.typicode.com/todos/1