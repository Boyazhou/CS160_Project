import java.util.ArrayList;

public class Course {
	private String url="";//course url
	private String courseName="";
	private String instructorNames;
	private String instructorImages;
	private String startDates="2020-12-31";
	private int courseLength = 0;
	private String category="";
	private ArrayList<String> courseImages;
	private String shortDesc="";
	private String university="";
	private String videoLink="";
	private String certificate="";
	private int course_fee=0;
	private String language="English";
	private String longDesc= "";
	private int course_id;
	private String time_scraped;
	public String site="www.futurelearn.com";
	
	public Course(){
		courseImages = new ArrayList<String>();	
	}
	
	public Course(int course_id){
		courseImages = new ArrayList<String>();
		this.setCourseId(course_id);
	}
	
	public String getUrl() {
		return url;
	}
	public void setUrl(String url) {
		this.url = url;
	}
	public String getInstructorNames() {
		return instructorNames;
	}
	public void addInstructorName(String instructorName) {
		this.instructorNames = instructorName;
	}
	public String getInstructorImages() {
		return instructorImages;
	}
	public void addInstructorImage(String instructorImage) {
		this.instructorImages = instructorImage;
	}
	public String getStartDates() {
		return startDates;
	}
	public void setStartDate(String startDate) {
		this.startDates = startDate;
	}
	public String getCourseName() {
		return courseName;
	}
	public void setCourseName(String courseName) {
		this.courseName = courseName;
	}
	public int getCourseLength() {
		return courseLength;
	}
	public void addCourseLength(String courseLength) {
		this.courseLength = Integer.parseInt(courseLength)*7;
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
	public String getShortDesc(){
		return shortDesc;
	}
	public void setShortDesc(String shortDesc){
		this.shortDesc = shortDesc;
	}
	public String getUniversity(){
		return university;
	}
	public void setUniversity(String university){
		this.university = university;
	}
	public String getVideoLink(){
		return videoLink;
	}
	public void setVideoLink(String videoLink){
		this.videoLink = videoLink;
	}
    public void setCertificate(String certificate){
       this.certificate = certificate;
    }
    public String getCertificate(){
       return certificate;
    }
	public int getCourse_fee(){
		return course_fee;
	}
	public String getLanguage(){
		return language;
	}
    public void setLongDescription(String longdescription){
        this.longDesc = longdescription;
    }
    public String getLongDescription(){
        return longDesc;
    }
    public void setCourseId(int course_id){
    	this.course_id = course_id;
    }
    public int getCourseId(){
    	return course_id;
    }
	public void setTimeScraped(String time_scraped){
		this.time_scraped = time_scraped;
	}
	public String getTimeScraped(){
		return time_scraped;
	}
	
	@Override
	public String toString(){
		return  "Course Id: " + course_id + "\n"
				+"Title: "+ courseName + "\n"
				+"Short_desc: " + shortDesc + "\n"
				+"Long_desc: " + longDesc + "\n"
				+"Course_link: " + url + "\n"
				+"Video_link: " + videoLink + "\n"
				+"Start Date: "+ startDates + "\n"
				+"Course Length: "+ courseLength +" days"+ "\n"
				+"Course Images: "+ courseImages + "\n"
				+"Category: "+ category + "\n"
				+"Site: " +  site + "\n"
				+"Course fee: " + course_fee + "\n"
				+"Language: " + language + "\n"
				+"Certificate: " + certificate + "\n"
				+"University: " + university + "\n"
				+"Time_scraped: "+  time_scraped +"\n";
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
