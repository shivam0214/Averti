import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Imageb from './Imageb/Imageb';
import Checkbox from '@material-ui/core/Checkbox';
import FormControlLabel from '@material-ui/core/FormControlLabel';
import {
    Badge,
    Button,
    Card,
    CardBody,
    CardFooter,
    CardHeader,
    Col,
    Collapse,
    Form,
    FormGroup,
    FormText,
    FormFeedback,
    Input,
    InputGroup,
    InputGroupAddon,
    InputGroupButtonDropdown,
    InputGroupText,
    Label,
    Row,
  } from 'reactstrap';

class AdvisorInfo extends Component{
    constructor(props){
        super(props);
        this.state = {
        fields : {},
        error : {}
        }
      }
      
       handleValidation(){
        let fields = this.state.fields;
        let errors = {};
        let formIsValid = true;
        if(!fields["license_no"]){
          formIsValid= false;
          errors["license_no"] = "Cannot be empty";
        }

        if(!fields["selectSm"]){
          formIsValid= false;
          errors["selectSm"] = "Select Any Option";
        
        } 
        if(!fields["refer"]){
          formIsValid=false;
          errors["refer"]=" Cannot be empty"
        } 
        if(!fields["select_data"]){
           formIsValid=false;
          errors["select_data"]=" Select Any Option";         
        }  
        this.setState({errors: errors});
        return formIsValid;
        }


      continue = e =>{
      e. preventDefault();
      if(this.handleValidation()){
      this.props.nextStep();
      }
      }
      
      back = e =>{
        e. preventDefault();
        this.props.prvStep();
      }

      handleChange(field, e){         
        let fields = this.state.fields;
        fields[field] = e.target.value;        
        this.setState({fields});
      }
       
    render(){
        return <div>  <Imageb/>                    
        <Row className="top justify-content-center ">
            <Col md="6" xs="12" sm="6"> 
          <Card className="top"> 
                    
        <CardBody>
        <Row>  
            <Col className="text-center" md='12'>
            <img className="reglogo" src="assets/images/averti.png" alt="averti"/>
            </Col>
            <Col >
                <h5 className="text-info text-center">INFORMATION</h5>
            </Col>
        </Row>
        <Row>
                <Col xs="12">
                
                <FormGroup>
                <span className="error">{this.state.errors===undefined ?null: this.state.errors["license_no"]}</span>
                <Label className="sr-only" htmlFor="licenseno">Lincense Number</Label>
                <Input type="text" id="license_no"  name="license_no" onChange={this.handleChange.bind(this,"license_no")} value={this.state.fields["license_no"]} placeholder="Lincense Number" />
                </FormGroup>
                </Col>
                <Col md="12" xs="12" sm="6">
                <FormGroup row>
                  <Label className="sr-only" htmlFor="selectSm">How Did You Hear About Us?</Label>
                <Col xs="12" md="12">
                                <span className="error">{this.state.errors===undefined ?null: this.state.errors["selectSm"]}</span>                
                  <Input type="select" name="selectSm" onChange={this.handleChange.bind(this,"selectSm")} value={this.state.fields["selectSm"]} id="SelectLm" bsSize="sm">
                    <option value="">How Did You Hear About Us?</option>
                    <option value="1">Option #1</option>
                    <option value="2">Option #2</option>
                    <option value="3">Option #3</option>
                    <option value="4">Option #4</option>
                    <option value="5">Option #5</option>
                  </Input>
                </Col>
              </FormGroup>
              </Col>
                <Col xs="12">
                <FormGroup>
                <span className="error">{this.state.errors===undefined ?null: this.state.errors["refer"]}</span>                
                <Label className="sr-only" htmlFor=" Did Someone Refer you to us">Did Someone Refer you to us</Label>
                <Input type="text" id="refer" onChange={this.handleChange.bind(this,"refer")}  name="refer" placeholder="Did Someone Refer you to us?" />
                </FormGroup>                    
                </Col>
                
                <Col xs="12" md="12">
                <FormGroup row>
                  <Label className="sr-only" htmlFor="selectSm">What database program  do you currently Use</Label>
                    <Col xs="12" md="12">
                    <span className="error">{this.state.errors===undefined ?null: this.state.errors["select_data"]}</span>                                
                      <Input type="select" onChange={this.handleChange.bind(this,"select_data")} name="select_data" id="select_data" bsSize="sm">
                        <option value="">What database program  do you currently Use</option>
                        <option value="1">Option #1</option> 
                        <option value="2">Option #2</option>
                        <option value="3">Option #3</option>
                        <option value="4">Option #4</option>
                        <option value="5">Option #5</option>
                      </Input>
                    </Col>
              </FormGroup>
              </Col> 
              <Col md="12" xs="12" >
              <FormGroup>
                  <FormControlLabel value="end" className="let" control={<Checkbox color="primary"/>} 
                    className="labelcheck"  label="I would like to recive the redtail email Newsletter"  
                      labelPlacement="end"/>
                  </FormGroup>
              </Col> 
              <Col md="12" xs="12">
                <FormGroup>
                  <FormControlLabel value="end"  control={<Checkbox color="primary" />}
                     className="labelcheck" label="Populate My Trial Database with Sample Data"
                      labelPlacement="end"/>      
                  </FormGroup>
              </Col>
            </Row>               
            <Button type="submit" size="md" className="float-right" onClick={this.continue} color="info"> Next</Button>
            <Button type="reset" size="md" onClick={this.back}> PREVIOUS</Button>
            </CardBody> 
            </Card>            
        </Col>       
        </Row>
    </div>
    }
}
export default AdvisorInfo;