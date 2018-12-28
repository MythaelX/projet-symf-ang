import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ListForOneComponent } from './list-for-one.component';

describe('ListForOneComponent', () => {
  let component: ListForOneComponent;
  let fixture: ComponentFixture<ListForOneComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ListForOneComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ListForOneComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
