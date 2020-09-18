import React, { Component } from 'react';
import Imageb from '../Advisor/Imageb/Imageb';

import {
    Button,
    Card,
    CardBody,
    Col,
    FormGroup,
    Input,
    Label,
    Row,
  } from 'reactstrap';

  class AdvisorIntro extends Component{
    constructor(props){
        super(props);
        this.state = {
          image :false,
        }
        this.image=this.image.bind(this);
      }
      image(){
        this.setState({
          image: !this.state.image,
        });
      }
      
    continue = e =>{
      e. preventDefault();
      this.props.nextStep();
    }
    back = e =>{
      e. preventDefault();
      this.props.prvStep();
    }
      render(){
          return  <div>                      
          <Imageb/>
          <Row className="pt justify-content-center">
              <Col md="6" xs="12" sm="6"> 
              <Card className="top ">
              <CardBody>
              <Row>
                        
                  <Col className="text-center" md='12'>
                  <img className="reglogo" src="assets/images/averti.png" alt="averti"/>
                  </Col>
                <Col className="large-text text-center">
                <h5 className="text-info">INTRODUCTION</h5>
                </Col>                        
              </Row>
             
            <Col md="12" xs="12" sm="6">
                <b><p className="text-center large-text text-info font-bold font-italic">Before we can create your life and financial plan, 
                   we need to find out what you're looking for and what you value most.</p>
                </b>
            </Col>
            <Button type="submit" size="md" className="float-right" onClick={this.continue} color="info"> Next</Button>
            <Button type="reset" size="md" onClick={this.back}> Previous</Button>
            </CardBody> 
            </Card>
        </Col>
          </Row>
          </div>
      
      }
  }
  export default AdvisorIntro;