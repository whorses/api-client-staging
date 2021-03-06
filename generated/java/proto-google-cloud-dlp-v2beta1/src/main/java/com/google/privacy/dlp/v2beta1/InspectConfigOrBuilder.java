// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/privacy/dlp/v2beta1/dlp.proto

package com.google.privacy.dlp.v2beta1;

public interface InspectConfigOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.privacy.dlp.v2beta1.InspectConfig)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Restricts what info_types to look for. The values must correspond to
   * InfoType values returned by ListInfoTypes or found in documentation.
   * Empty info_types runs all enabled detectors.
   * </pre>
   *
   * <code>repeated .google.privacy.dlp.v2beta1.InfoType info_types = 1;</code>
   */
  java.util.List<com.google.privacy.dlp.v2beta1.InfoType> 
      getInfoTypesList();
  /**
   * <pre>
   * Restricts what info_types to look for. The values must correspond to
   * InfoType values returned by ListInfoTypes or found in documentation.
   * Empty info_types runs all enabled detectors.
   * </pre>
   *
   * <code>repeated .google.privacy.dlp.v2beta1.InfoType info_types = 1;</code>
   */
  com.google.privacy.dlp.v2beta1.InfoType getInfoTypes(int index);
  /**
   * <pre>
   * Restricts what info_types to look for. The values must correspond to
   * InfoType values returned by ListInfoTypes or found in documentation.
   * Empty info_types runs all enabled detectors.
   * </pre>
   *
   * <code>repeated .google.privacy.dlp.v2beta1.InfoType info_types = 1;</code>
   */
  int getInfoTypesCount();
  /**
   * <pre>
   * Restricts what info_types to look for. The values must correspond to
   * InfoType values returned by ListInfoTypes or found in documentation.
   * Empty info_types runs all enabled detectors.
   * </pre>
   *
   * <code>repeated .google.privacy.dlp.v2beta1.InfoType info_types = 1;</code>
   */
  java.util.List<? extends com.google.privacy.dlp.v2beta1.InfoTypeOrBuilder> 
      getInfoTypesOrBuilderList();
  /**
   * <pre>
   * Restricts what info_types to look for. The values must correspond to
   * InfoType values returned by ListInfoTypes or found in documentation.
   * Empty info_types runs all enabled detectors.
   * </pre>
   *
   * <code>repeated .google.privacy.dlp.v2beta1.InfoType info_types = 1;</code>
   */
  com.google.privacy.dlp.v2beta1.InfoTypeOrBuilder getInfoTypesOrBuilder(
      int index);

  /**
   * <pre>
   * Only returns findings equal or above this threshold.
   * </pre>
   *
   * <code>.google.privacy.dlp.v2beta1.Likelihood min_likelihood = 2;</code>
   */
  int getMinLikelihoodValue();
  /**
   * <pre>
   * Only returns findings equal or above this threshold.
   * </pre>
   *
   * <code>.google.privacy.dlp.v2beta1.Likelihood min_likelihood = 2;</code>
   */
  com.google.privacy.dlp.v2beta1.Likelihood getMinLikelihood();

  /**
   * <pre>
   * Limits the number of findings per content item.
   * </pre>
   *
   * <code>int32 max_findings = 3;</code>
   */
  int getMaxFindings();

  /**
   * <pre>
   * When true, a contextual quote from the data that triggered a finding is
   * included in the response; see Finding.quote.
   * </pre>
   *
   * <code>bool include_quote = 4;</code>
   */
  boolean getIncludeQuote();

  /**
   * <pre>
   * When true, excludes type information of the findings.
   * </pre>
   *
   * <code>bool exclude_types = 6;</code>
   */
  boolean getExcludeTypes();
}
