// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/api/distribution.proto

package com.google.api;

public interface DistributionOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.api.Distribution)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The number of values in the population. Must be non-negative.
   * </pre>
   *
   * <code>int64 count = 1;</code>
   */
  long getCount();

  /**
   * <pre>
   * The arithmetic mean of the values in the population. If `count` is zero
   * then this field must be zero.
   * </pre>
   *
   * <code>double mean = 2;</code>
   */
  double getMean();

  /**
   * <pre>
   * The sum of squared deviations from the mean of the values in the
   * population.  For values x_i this is:
   *     Sum[i=1..n]((x_i - mean)^2)
   * Knuth, "The Art of Computer Programming", Vol. 2, page 323, 3rd edition
   * describes Welford's method for accumulating this sum in one pass.
   * If `count` is zero then this field must be zero.
   * </pre>
   *
   * <code>double sum_of_squared_deviation = 3;</code>
   */
  double getSumOfSquaredDeviation();

  /**
   * <pre>
   * If specified, contains the range of the population values. The field
   * must not be present if the `count` is zero.
   * </pre>
   *
   * <code>.google.api.Distribution.Range range = 4;</code>
   */
  boolean hasRange();
  /**
   * <pre>
   * If specified, contains the range of the population values. The field
   * must not be present if the `count` is zero.
   * </pre>
   *
   * <code>.google.api.Distribution.Range range = 4;</code>
   */
  com.google.api.Distribution.Range getRange();
  /**
   * <pre>
   * If specified, contains the range of the population values. The field
   * must not be present if the `count` is zero.
   * </pre>
   *
   * <code>.google.api.Distribution.Range range = 4;</code>
   */
  com.google.api.Distribution.RangeOrBuilder getRangeOrBuilder();

  /**
   * <pre>
   * Defines the histogram bucket boundaries.
   * </pre>
   *
   * <code>.google.api.Distribution.BucketOptions bucket_options = 6;</code>
   */
  boolean hasBucketOptions();
  /**
   * <pre>
   * Defines the histogram bucket boundaries.
   * </pre>
   *
   * <code>.google.api.Distribution.BucketOptions bucket_options = 6;</code>
   */
  com.google.api.Distribution.BucketOptions getBucketOptions();
  /**
   * <pre>
   * Defines the histogram bucket boundaries.
   * </pre>
   *
   * <code>.google.api.Distribution.BucketOptions bucket_options = 6;</code>
   */
  com.google.api.Distribution.BucketOptionsOrBuilder getBucketOptionsOrBuilder();

  /**
   * <pre>
   * If `bucket_options` is given, then the sum of the values in `bucket_counts`
   * must equal the value in `count`.  If `bucket_options` is not given, no
   * `bucket_counts` fields may be given.
   * Bucket counts are given in order under the numbering scheme described
   * above (the underflow bucket has number 0; the finite buckets, if any,
   * have numbers 1 through N-2; the overflow bucket has number N-1).
   * The size of `bucket_counts` must be no greater than N as defined in
   * `bucket_options`.
   * Any suffix of trailing zero bucket_count fields may be omitted.
   * </pre>
   *
   * <code>repeated int64 bucket_counts = 7;</code>
   */
  java.util.List<java.lang.Long> getBucketCountsList();
  /**
   * <pre>
   * If `bucket_options` is given, then the sum of the values in `bucket_counts`
   * must equal the value in `count`.  If `bucket_options` is not given, no
   * `bucket_counts` fields may be given.
   * Bucket counts are given in order under the numbering scheme described
   * above (the underflow bucket has number 0; the finite buckets, if any,
   * have numbers 1 through N-2; the overflow bucket has number N-1).
   * The size of `bucket_counts` must be no greater than N as defined in
   * `bucket_options`.
   * Any suffix of trailing zero bucket_count fields may be omitted.
   * </pre>
   *
   * <code>repeated int64 bucket_counts = 7;</code>
   */
  int getBucketCountsCount();
  /**
   * <pre>
   * If `bucket_options` is given, then the sum of the values in `bucket_counts`
   * must equal the value in `count`.  If `bucket_options` is not given, no
   * `bucket_counts` fields may be given.
   * Bucket counts are given in order under the numbering scheme described
   * above (the underflow bucket has number 0; the finite buckets, if any,
   * have numbers 1 through N-2; the overflow bucket has number N-1).
   * The size of `bucket_counts` must be no greater than N as defined in
   * `bucket_options`.
   * Any suffix of trailing zero bucket_count fields may be omitted.
   * </pre>
   *
   * <code>repeated int64 bucket_counts = 7;</code>
   */
  long getBucketCounts(int index);
}
