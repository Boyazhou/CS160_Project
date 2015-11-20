import java.util.ArrayList;


public class Course {
	private String url="";//course url
	private String courseName="";
	private ArrayList<String> instructorNames;
	private ArrayList<String> instructorImages;
	private ArrayList<String> startDates;
	private ArrayList<String> courseLengths;
	private String category="";
	private ArrayList<String> courseImages;
	
	public Course(){
		instructorNames = new ArrayList<String>();
		instructorImages = new ArrayList<String>();
		startDates = new ArrayList<String>();
		courseLengths = new ArrayList<String>();
		courseImages = new ArrayList<String>();
		
	}
	public String getUrl() {
		return url;
	}
	public void setUrl(String url) {
		this.url = url;
	}
	public String getInstructorNames() {
		return arraylistToString(instructorNames);
	}
	public void addInstructorName(String instructorName) {
		instructorNames.add(instructorName);
	}
	public String getInstructorImages() {
		return arraylistToString(instructorImages);
	}
	public void addInstructorImage(String instructorImage) {
		instructorImages.add(instructorImage);
	}
	public String getStartDates() {
		return arraylistToString(startDates);
	}
	public void addStartDate(String startDate) {
		startDates.add(startDate);
	}
	public String getCourseName() {
		return courseName;
	}
	public void setCourseName(String courseName) {
		this.courseName = courseName;
	}
	public String getCourseLength() {
		return arraylistToString(courseLengths);
	}
	public void addCourseLength(String courseLength) {
		courseLengths.add(courseLength);
	}
	public String getCategory() {
		return category;
	}
	public void setCategory(String category) {
		this.category = category;
	}
	public void addCourseImage(String courseImage){
		courseImages.add(courseImage);
	}
	public String getCourseImages(){
		return arraylistToString(courseImages);
	}
	@Override
	public String toString(){
		return "Course Name: "+ courseName + "\n"
				+"Category: "+ category + "\n"
				+"Course Images: "+ courseImages + "\n"
				+"Course URL: "+ url + "\n"
				+"Instructor(s): "+ instructorNames + "\n"
				+"Start Date: "+ startDates.get(0) + "\n"
				+"Duration: "+ courseLengths.get(0) +" weeks"+ "\n";
	}
	
	//convert a list of string to a string 
	public static String arraylistToString(ArrayList<String> list){
		if(list == null || list.size() == 0)
			return "";
		//nonprint character
		if(list.size() == 1 && list.get(0).length() == 0)
			return "";
		String str = list.toString();
		str = str.split("[\\[\\]]")[1];
		return str;
	}
}
